<?php
/*
   Copyright 2010 Persistent Systems Limited

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
 */

/*
 * @copyright  Copyright (c) 2010, Persistent Systems Limited (http://www.persistentsys.com)
 * @license    http://odataphp.codeplex.com/license
 */
class DataServiceResponse {
    protected $_batchResponse;
    protected $_headers;
    protected $_operationResponses;
    protected $_statusCode;

    /**
     *
     * @param array $headers
     * @param int $statusCode
     * @param OperationResponse[] $responses
     * @param boolean $batchResponse
     */
    public function __construct($headers, $statusCode, $responses, $batchResponse) {
        $this->_headers = $headers;
        $this->_statusCode = $statusCode;
        $this->_operationResponses = $responses;
        $this->_batchResponse = $batchResponse;
    }

    /**
     * To get the headers.
     *
     * @return array
     */
    public function getBatchHeaders() {
        return $this->_headers;
    }

    /**
     * To get the status code.
     *
     * @return int
     */
    public function BatchStatusCode() {
        return $this->_statusCode;
    }

    /**
     *
     * @return boolean
     */
    public function IsBatchResponse() {
        return $this->_batchResponse;
    }

    /**
     *
     * @return OperationResponse[]
     */
    public function getOperationResponses() {
        return $this->_operationResponses;
    }
}
