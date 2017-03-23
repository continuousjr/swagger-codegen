<?php
/**
 * FakeApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore *_/ ' \" =end -- \\r\\n \\n \\r
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\  *_/ ' \" =end --
 *
 * OpenAPI spec version: 1.0.0 *_/ ' \" =end -- \\r\\n \\n \\r
 * Contact: apiteam@swagger.io *_/ ' \" =end -- \\r\\n \\n \\r
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Http\Client\Exception\NetworkException;
use Http\Client\HttpClient;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * FakeApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FakeApi
{
    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * @var ObjectSerializer
     */
    protected $serializer;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param HttpClient $client
     * @param HeaderSelector $selector
     * @param ObjectSerializer $serializer
     * @param Configuration $config
     */
    public function __construct(
        HttpClient $client,
        Configuration $config = null,
        HeaderSelector $selector = null,
        ObjectSerializer $serializer = null
    ) {
        $this->client = $client;
        $this->serializer = $serializer ?: new ObjectSerializer();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->config = $config ?: new Configuration();
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation testCodeInjectEndRnNR
     *
     * To test code injection *_/ ' \" =end -- \\r\\n \\n \\r
     *
     * @param string $test_code_inject____end____rn_n_r To test code injection *_/ &#39; \&quot; &#x3D;end -- \\r\\n \\n \\r (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function testCodeInjectEndRnNR($test_code_inject____end____rn_n_r = null)
    {
        $this->testCodeInjectEndRnNRWithHttpInfo($test_code_inject____end____rn_n_r);
    }

    /**
     * Operation testCodeInjectEndRnNRWithHttpInfo
     *
     * To test code injection *_/ ' \" =end -- \\r\\n \\n \\r
     *
     * @param string $test_code_inject____end____rn_n_r To test code injection *_/ &#39; \&quot; &#x3D;end -- \\r\\n \\n \\r (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function testCodeInjectEndRnNRWithHttpInfo($test_code_inject____end____rn_n_r = null)
    {

        $resourcePath = '/fake';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';



        // form params
        if ($test_code_inject____end____rn_n_r !== null) {
            $formParams['test code inject */ &#39; &quot; &#x3D;end -- \r\n \n \r'] = $this->serializer->toFormValue($test_code_inject____end____rn_n_r);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json', '*_/  \" =end --']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', '*_/  \" =end --'],
                ['application/json', '*_/  \" =end --']
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');
        $headers = array_merge(
            $this->config->getDefaultHeaders(),
            $headerParams,
            $headers
        );

        $request = new Request(
            'PUT',
            $url,
            $headers,
            $httpBody
        );
        try {
            $response = $this->client->sendRequest($request);
        } catch (NetworkException $e) {
            throw new ApiException($e->getMessage(), null, $e);
        }

        if ($response->getStatusCode() >= 400) {
            throw new ApiException("[{$response->getStatusCode()}] Error connecting to the API ($url)", $response->getStatusCode());
        }

        return [null, $response->getStatusCode(), $response->getHeaders()];
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/fake'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
}
