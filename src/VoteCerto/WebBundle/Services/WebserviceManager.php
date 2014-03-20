<?php
namespace VoteCerto\WebBundle\Services;

use Symfony\Component\DependencyInjection\Container;
use VoteCerto\WebBundle\Document\Deputy;

class WebserviceManager
{
    /**
     * Symfony dependency injection container
     * @var \Symfony\Component\DependencyInjection\Container
     */
    protected $container;

    /**
     * Deputies webservice url
     * @var string
     */
    protected $webServiceUrl;

    public function __construct(Container $container, $webServiceUrl)
    {
        $this->webServiceUrl = $webServiceUrl;
        $this->container = $container;
    }

    /**
     * Executes curl at the url send and get results from deputies
     * @param $url
     * @return string
     */
    public function executeCurl()
    {
        $curl = curl_init();
        curl_setopt( $curl , CURLOPT_URL , $this->webServiceUrl );
        curl_setopt( $curl , CURLOPT_SSL_VERIFYPEER , false );
        curl_setopt( $curl , CURLOPT_USERAGENT , isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) ? $_SERVER[ 'HTTP_USER_AGENT' ] : "Mozilla/4.0" );
        curl_setopt( $curl , CURLOPT_RETURNTRANSFER , true );

        return curl_exec( $curl );

        curl_close( $curl );
    }


    /**
     * Update the deputies at mongodb
     */
    public function updateDeputies()
    {
        $dm = $this->container->get('doctrine_mongodb')->getManager();

        $arrayDeputies = $this->getRemoteDeputies();

        foreach($arrayDeputies as $deputy){
            $document = new Deputy();
            $document->setIdDeputy($deputy['idDeputy']);
            $document->setCondition($deputy['condition']);
            $document->setRegistration($deputy['registration']);
            $document->setName($deputy['name']);
            $document->setFantasyName($deputy['fantasyName']);
            $document->setPhoto($deputy['photo']);
            $document->setSex($deputy['sex']);
            $document->setState($deputy['state']);
            $document->setFiliation($deputy['filiation']);
            $document->setCabinet($deputy['cabinet']);
            $document->setAttachment($deputy['attachment']);
            $document->setPhone($deputy['phone']);
            $document->setEmail($deputy['email']);
            $document->setLocalizer($deputy['localizer']);
            $document->setCommittees($deputy['committees']);

            $dm->persist($document);
            $dm->flush();
        }
    }

    /**
     * Get remote deputies at webservice
     * @return array
     */
    public function getRemoteDeputies()
    {
        $results = $this->executeCurl();
        $deputies = simplexml_load_string($results);

        $arrayDeputies = [];
        $counter = 0;
        foreach ($deputies as $deputy)  {
            $arrayDeputies[$counter] = [
                'idDeputy' => (int) $deputy->idParlamentar,
                'condition' => (string) $deputy->condicao,
                'registration' => (int) $deputy->matricula,
                'name' => (string) $deputy->nome,
                'fantasyName' => (string) $deputy->nomeParlamentar,
                'photo' => (string) $deputy->urlFoto,
                'sex' => (string) $deputy->sexo,
                'state' => (string) $deputy->uf,
                'filiation' => (string) $deputy->partido,
                'cabinet' => (string) $deputy->gabinete,
                'attachment' => (string) $deputy->anexo,
                'phone' => (string) $deputy->fone,
                'email' => (string) $deputy->email,
                'localizer' => (int) $deputy->ideCadastro,
            ];

            $arrayDeputies[$counter]['committees'] = $this->getCommittees(
                $deputy->comissoes->titular,
                $deputy->comissoes->suplente
            );

            $counter++;
        }

        return $arrayDeputies;
    }

    /**
     * @param $committeesFirst
     * @param $committeesSecond
     */
    protected function getCommittees($committeesFirst, $committeesSecond)
    {
        $committees = [];

        foreach($committeesFirst->comissao as $committee) {
            $committees[] = $this->convertCommitteesAttributes($committee);
        }

        foreach($committeesSecond->comissao as $committee) {
            $committees[] = $this->convertCommitteesAttributes($committee);
        }

        return $committees;
    }

    /**
     * @param \SimpleXmlElement $committee
     * @return array
     */
    protected function convertCommitteesAttributes($committee)
    {
        $attributes = $committee->attributes();

        return [
            'initials' => (string) $attributes['sigla'],
            'description' => (string) $attributes['nome'],
        ];
    }
}