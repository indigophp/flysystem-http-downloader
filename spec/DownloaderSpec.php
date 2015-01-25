<?php

namespace spec\Indigo\Flysystem;

use League\Flysystem\Filesystem;
use Ivory\HttpAdapter\HttpAdapterInterface;
use Psr\Http\Message\OutgoingRequestInterface as Request;
use Psr\Http\Message\IncomingResponseInterface as Response;
use Psr\Http\Message\StreamableInterface as Stream;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DownloaderSpec extends ObjectBehavior
{
    function let(Filesystem $filesystem, HttpAdapterInterface $httpAdapter)
    {
        $this->beConstructedWith($filesystem, $httpAdapter);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Indigo\Flysystem\Downloader');
    }

    function it_downloads_a_request(Filesystem $filesystem, HttpAdapterInterface $httpAdapter, Request $request, Response $response, Stream $stream)
    {
        $resource = tmpfile();
        fwrite($resource, 'test');
        fseek($resource, 0);

        $httpAdapter->sendRequest($request)->willReturn($response);
        $response->getBody()->willReturn($stream);
        $stream->detach()->willReturn($resource);

        $filesystem->putStream('path/to/file', $resource)->shouldBeCalled();

        $this->download($request, 'path/to/file');
    }
}
