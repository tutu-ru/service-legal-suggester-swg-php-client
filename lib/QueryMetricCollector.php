<?php
declare(strict_types=1);

namespace TutuRu\LegalSuggesterClient;

use TutuRu\Metrics\MetricCollector;

class QueryMetricCollector extends MetricCollector
{
    const QUERY_TYPE_SYNC = 'sync';
    const QUERY_TYPE_ASYNC = 'async';

    const QUERY_RESULT_SUCCESS = '200';
    const QUERY_RESULT_UNKNOWN = 'unknown';

    private $project;
    private $operationId;
    private $queryType;

    private $statusCode;


    public function __construct(string $project, string $operationId, string $queryType)
    {
        $this->project = $project;
        $this->operationId = $operationId;
        $this->queryType = $queryType;
    }


    public function saveResult($statusCode)
    {
        $this->statusCode = $statusCode;
    }


    protected function getTimersMetricName(): string
    {
        return 'http_rest_client_api_request_duration';
    }


    protected function getTimersMetricTags(): array
    {
        return [
            'project'      => $this->project ?: 'undefined_project',
            'operation_id' => $this->operationId ?: 'undefined_operation_id',
            'query_type'   => $this->queryType ?: 'undefined_query_type',
            'status_code'  => $this->statusCode ?? 'unknown'
        ];
    }
}
