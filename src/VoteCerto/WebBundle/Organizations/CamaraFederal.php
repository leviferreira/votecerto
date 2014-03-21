<?php
namespace VoteCerto\WebBundle\Organizations;

use VoteCerto\WebBundle\Document\Deputy;
use VoteCerto\WebBundle\Organizations\Interfaces\OrganizationInterface;

/**
 * Class CamaraFederal
 * This class implements an Organization Interface it represents the
 * webservice of 'Camara Federal do Brasil'
 * @package VoteCerto\WebBundle\Organizations
 */
class CamaraFederal implements OrganizationInterface
{
    protected $webServiceUrl;

    public function __construct($webServiceUrl)
    {
        $this->webServiceUrl = $webServiceUrl;
    }

    /**
     * Generates a deputies iterator
     * @return array
     */
    public function getDeputies()
    {
        $results = $this->executeAction('/ObterDeputados');
        $deputies = simplexml_load_string($results);

        foreach ($deputies as $deputy)  {
            $document = new Deputy();
            $document->setIdDeputy((int) $deputy->idParlamentar);
            $document->setCondition((string) $deputy->condicao);
            $document->setRegistration((int) $deputy->matricula);
            $document->setName((string) $deputy->nome);
            $document->setFantasyName((string) $deputy->nomeParlamentar);
            $document->setPhoto((string) $deputy->urlFoto);
            $document->setSex((string) $deputy->sexo);
            $document->setState((string) $deputy->uf);
            $document->setFiliation((string) $deputy->partido);
            $document->setCabinet((string) $deputy->gabinete);
            $document->setAttachment((string) $deputy->anexo);
            $document->setPhone((string) $deputy->fone);
            $document->setEmail((string) $deputy->email);
            $document->setLocalizer((int) $deputy->ideCadastro);
            $document->setCommittees(
                $this->getCommittees(
                    $deputy->comissoes->titular,
                    $deputy->comissoes->suplente
                )
            );

            yield $document;
        }
    }

    /**
     * Executes an action at webservice
     * @param $action
     * @return mixed
     */
    public function executeAction($action)
    {
        $curl = curl_init();
        curl_setopt( $curl , CURLOPT_URL , $this->webServiceUrl.$action );
        curl_setopt( $curl , CURLOPT_SSL_VERIFYPEER , false );
        curl_setopt( $curl , CURLOPT_USERAGENT , isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) ? $_SERVER[ 'HTTP_USER_AGENT' ] : "Mozilla/4.0" );
        curl_setopt( $curl , CURLOPT_RETURNTRANSFER , true );

        return curl_exec( $curl );

        curl_close( $curl );
    }

    /**
     * Get committees from both, first and second deputy
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
     * Convert the xml attributes to array ones
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