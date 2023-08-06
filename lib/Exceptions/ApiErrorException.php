<?php

namespace Scayle\StorefrontApi\Exceptions;

use Throwable;

class ApiErrorException extends \Exception
{
    /**
     * @var ApiError[]
     */
    private $errors = [];

    /**
     * @var int
     */
    private $statusCode;

    /**
     * @param array $responseErrors
     * @param int $statusCode
     */
    public function __construct($responseErrors, $statusCode)
    {
        $this->statusCode = $statusCode;
        $this->errors = $this->parseErrors($responseErrors);
        parent::__construct("Errors occured while handling the API request ", $statusCode);
    }

    /**
     * @return ApiError|null
     */
    public function getFirstError()
    {
        return empty($this->errors) ? null : $this->errors[0];
    }

    /**
     * @return ApiError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param array $errors
     * @return ApiError[]
     */
    private function parseErrors($errors)
    {
        $adminApiErrors = [];

        if (array_key_exists('errors', $errors)) {
            foreach ($errors['errors'] as $error) {
                $adminApiErrors[] = new ApiError($error['errorKey'], $error['message'], $error['context']);
            }
        } else {
            $code = $errors['code'] ?? $this->getStatusCode();
            $adminApiErrors[] = new ApiError($code, $errors['message'] ?? '', '');
        }


        return $adminApiErrors;
    }
}
