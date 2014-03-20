<?php
namespace VoteCerto\WebBundle\Services;

use Symfony\Component\DependencyInjection\Container;

class DeputiesWebserviceManager
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
    public function executeCurl($url)
    {
        $curl = curl_init();
        curl_setopt( $curl , CURLOPT_URL , $url );
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
        echo $this->webServiceUrl;
    }
}