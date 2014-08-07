<?php
namespace Aws;

use GuzzleHttp\Command\Exception\CommandException;

/**
 * Represents an AWS exception that is thrown when a command fails.
 */
class AwsException extends CommandException
{
    /**
     * Gets the client that executed the command.
     *
     * @return AwsClientInterface
     */
    public function getClient()
    {
        return $this->getTransaction()->getClient();
    }

    /**
     * Get the name of the web service that encountered the error.
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->getClient()->getApi()->getMetadata('endpointPrefix');
    }

    /**
     * Get the request ID of the error. This value is only present if a
     * response was received and is not present in the event of a networking
     * error.
     *
     * @return string|null Returns null if no response was received
     */
    public function getAwsRequestId()
    {
        return $this->getTransaction()
            ->getContext()
            ->getPath('aws_error/request_id');
    }

    /**
     * Get the AWS error type.
     *
     * @return string|null Returns null if no response was received
     */
    public function getAwsErrorType()
    {
        return $this->getTransaction()
            ->getContext()
            ->getPath('aws_error/type');
    }

    /**
     * Get the AWS error code.
     *
     * @return string|null Returns null if no response was received
     */
    public function getAwsErrorCode()
    {
        return $this ->getTransaction()
            ->getContext()
            ->getPath('aws_error/code');
    }

    /**
     * @deprecated Use getAwsRequestId() instead
     */
    public function getRequestId()
    {
        return $this->getAwsRequestId();
    }

    /**
     * @deprecated Use getAwsErrorCode() instead
     */
    public function getExceptionCode()
    {
        return $this->getAwsErrorCode();
    }

    /**
     * @deprecated Use getAwsErrorType() instead
     */
    public function getExceptionType()
    {
        return $this->getAwsErrorType();
    }
}