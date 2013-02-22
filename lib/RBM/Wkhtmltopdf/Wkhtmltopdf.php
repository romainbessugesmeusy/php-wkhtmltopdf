<?php

namespace RBM\Wkhtmltopdf;


/**
 * Class Wkhtmltopdf
 *
 * @method void setAllow
 * @method array getAllow
 * @method void setBook
 * @method array getBook
 * @method void setCollate
 * @method array getCollate
 * @method void setCookie
 * @method array getCookie
 * @method void setCookieJar
 * @method array getCookieJar
 * @method void setCopies
 * @method array getCopies
 * @method void setCover
 * @method array getCover
 * @method void setCustomHeader
 * @method array getCustomHeader
 * @method void setDebugJavascript
 * @method array getDebugJavascript
 * @method void setDefaultHeader
 * @method array getDefaultHeader
 * @method void setDisableExternalLinks
 * @method array getDisableExternalLinks
 * @method void setDisableInternalLinks
 * @method array getDisableInternalLinks
 * @method void setDisableJavascript
 * @method array getDisableJavascript
 * @method void setDisablePdfCompression
 * @method array getDisablePdfCompression
 * @method void setDisableSmartShrinking
 * @method array getDisableSmartShrinking
 * @method void setDisallowLocalFileAccess
 * @method array getDisallowLocalFileAccess
 * @method void setDpi
 * @method array getDpi
 * @method void setEnablePlugins
 * @method array getEnablePlugins
 * @method void setEncoding
 * @method array getEncoding
 * @method void setExtendedHelp
 * @method array getExtendedHelp
 * @method void setForms
 * @method array getForms
 * @method void setGrayscale
 * @method array getGrayscale
 * @method void setHelp
 * @method array getHelp
 * @method void setHtmldoc
 * @method array getHtmldoc
 * @method void setIgnoreLoadErrors
 * @method array getIgnoreLoadErrors
 * @method void setLowquality
 * @method array getLowquality
 * @method void setMarginBottom
 * @method array getMarginBottom
 * @method void setMarginLeft
 * @method array getMarginLeft
 * @method void setMarginRight
 * @method array getMarginRight
 * @method void setMarginTop
 * @method array getMarginTop
 * @method void setMinimumFontSize
 * @method array getMinimumFontSize
 * @method void setNoBackground
 * @method array getNoBackground
 * @method void setOrientation
 * @method array getOrientation
 * @method void setPageHeight
 * @method array getPageHeight
 * @method void setPageOffset
 * @method array getPageOffset
 * @method void setPageSize
 * @method array getPageSize
 * @method void setPageWidth
 * @method array getPageWidth
 * @method void setPassword
 * @method array getPassword
 * @method void setPost
 * @method array getPost
 * @method void setPostFile
 * @method array getPostFile
 * @method void setPrintMediaType
 * @method array getPrintMediaType
 * @method void setProxy
 * @method array getProxy
 * @method void setQuiet
 * @method array getQuiet
 * @method void setReadArgsFromStdin
 * @method array getReadArgsFromStdin
 * @method void setRedirectDelay
 * @method array getRedirectDelay
 * @method void setReplace
 * @method array getReplace
 * @method void setStopSlowScripts
 * @method array getStopSlowScripts
 * @method void setTitle
 * @method array getTitle
 * @method void setToc
 * @method array getToc
 * @method void setUseXserver
 * @method array getUseXserver
 * @method void setUserStyleSheet
 * @method array getUserStyleSheet
 * @method void setUsername
 * @method array getUsername
 * @method void setVersion
 * @method array getVersion
 * @method void setZoom
 * @method array getZoom
 * @method void setFooterCenter
 * @method array getFooterCenter
 * @method void setFooterFontName
 * @method array getFooterFontName
 * @method void setFooterFontSize
 * @method array getFooterFontSize
 * @method void setFooterHtml
 * @method array getFooterHtml
 * @method void setFooterLeft
 * @method array getFooterLeft
 * @method void setFooterLine
 * @method array getFooterLine
 * @method void setFooterRight
 * @method array getFooterRight
 * @method void setFooterSpacing
 * @method array getFooterSpacing
 * @method void setHeaderCenter
 * @method array getHeaderCenter
 * @method void setHeaderFontName
 * @method array getHeaderFontName
 * @method void setHeaderFontSize
 * @method array getHeaderFontSize
 * @method void setHeaderHtml
 * @method array getHeaderHtml
 * @method void setHeaderLeft
 * @method array getHeaderLeft
 * @method void setHeaderLine
 * @method array getHeaderLine
 * @method void setHeaderRight
 * @method array getHeaderRight
 * @method void setHeaderSpacing
 * @method array getHeaderSpacing
 * @method void setTocDepth
 * @method array getTocDepth
 * @method void setTocDisableBackLinks
 * @method array getTocDisableBackLinks
 * @method void setTocDisableLinks
 * @method array getTocDisableLinks
 * @method void setTocFontName
 * @method array getTocFontName
 * @method void setTocHeaderFontName
 * @method array getTocHeaderFontName
 * @method void setTocHeaderFontSize
 * @method array getTocHeaderFontSize
 * @method void setTocHeaderText
 * @method array getTocHeaderText
 * @method void setTocL1FontSize
 * @method array getTocL1FontSize
 * @method void setTocL1Indentation
 * @method array getTocL1Indentation
 * @method void setTocL2FontSize
 * @method array getTocL2FontSize
 * @method void setTocL2Indentation
 * @method array getTocL2Indentation
 * @method void setTocL3FontSize
 * @method array getTocL3FontSize
 * @method void setTocL3Indentation
 * @method array getTocL3Indentation
 * @method void setTocL4FontSize
 * @method array getTocL4FontSize
 * @method void setTocL4Indentation
 * @method array getTocL4Indentation
 * @method void setTocL5FontSize
 * @method array getTocL5FontSize
 * @method void setTocL5Indentation
 * @method array getTocL5Indentation
 * @method void setTocL6FontSize
 * @method array getTocL6FontSize
 * @method void setTocL6Indentation
 * @method array getTocL6Indentation
 * @method void setTocL7FontSize
 * @method array getTocL7FontSize
 * @method void setTocL7Indentation
 * @method array getTocL7Indentation
 * @method void setTocNoDots
 * @method array getTocNoDots
 * @package Exaprint\GenPDF
 */
class Wkhtmltopdf
{
    protected static $_validOptions = [
        "allow" => ["path"],
        "book" => [],
        "collate" => [],
        "cookie" => ['name', 'value'],
        "cookie-jar " => ['name', 'value'],
        "copies" => ['number'],
        "cover" => ['url'],
        "custom-header" => ['name', 'value'],
        "debug-javascript" => [],
        "default-header" => [],
        "disable-external-links" => [],
        "disable-internal-links" => [],
        "disable-javascript" => [],
        "disable-pdf-compression" => [],
        "disable-smart-shrinking" => [],
        "disallow-local-file-access" => [],
        "dpi" => ['dpi'],
        "enable-plugins" => [],
        "encoding" => ['encoding'],
        "extended-help" => [],
        "forms" => [],
        "grayscale" => [],
        "help" => [],
        "htmldoc" => [],
        "ignore-load-errors" => [],
        "lowquality" => [],
        "margin-bottom" => ['unitreal'],
        "margin-left" => ['unitreal'],
        "margin-right" => ['unitreal'],
        "margin-top" => ['unitreal'],
        "minimum-font-size" => ['int'],
        "no-background" => [],
        "orientation" => ['orientation'],
        "page-height" => ['unitreal'],
        "page-offset" => ['offset'],
        "page-size" => ['size'],
        "page-width" => ['unitreal'],
        "password" => ['password'],
        "post" => ['name', 'value'],
        "post-file" => ['name', 'path'],
        "print-media-type" => [],
        "proxy" => ['proxy'],
        "quiet" => [],
        "read-args-from-stdin" => [],
        "redirect-delay" => ['msec'],
        "replace" => ['name', 'value'],
        "stop-slow-scripts" => [],
        "title" => ['text'],
        "toc" => [],
        "use-xserver" => [],
        "user-style-sheet" => ['url'],
        "username" => ['username'],
        "version" => [],
        "zoom" => ['float'],
        "footer-center" => ['text'],
        "footer-font-name" => ['name'],
        "footer-font-size" => ['size'],
        "footer-html" => ['url'],
        "footer-left" => ['text'],
        "footer-line" => [],
        "footer-right" => ['text'],
        "footer-spacing" => ['real'],
        "header-center" => ['text'],
        "header-font-name" => ['name'],
        "header-font-size" => ['size'],
        "header-html" => ['url'],
        "header-left" => ['text'],
        "header-line" => [],
        "header-right" => ['text'],
        "header-spacing" => ['real'],
        "toc-depth" => ['level'],
        "toc-disable-back-links" => [],
        "toc-disable-links" => [],
        "toc-font-name" => ['name'],
        "toc-header-font-name" => ['name'],
        "toc-header-font-size" => ['size'],
        "toc-header-text" => ['text'],
        "toc-l1-font-size" => ['size'],
        "toc-l1-indentation" => ['num'],
        "toc-l2-font-size" => ['size'],
        "toc-l2-indentation" => ['num'],
        "toc-l3-font-size" => ['size'],
        "toc-l3-indentation" => ['num'],
        "toc-l4-font-size" => ['size'],
        "toc-l4-indentation" => ['num'],
        "toc-l5-font-size" => ['size'],
        "toc-l5-indentation" => ['num'],
        "toc-l6-font-size" => ['size'],
        "toc-l6-indentation" => ['num'],
        "toc-l7-font-size" => ['size'],
        "toc-l7-indentation" => ['num'],
        "toc-no-dots" => [],
    ];

    public static $bin = '/opt/wkhtmltopdf/bin/wkhtmltopdf';

    protected $_options = [];

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws \BadMethodCallException
     */
    public function __call($name, $arguments)
    {
        if(!preg_match("#^(set|get)([A-Za-z0-9]+)#", $name, $matches)){
            throw new \BadMethodCallException("__call only accept getters and setters");
        }

        $method = $matches[1];
        $option = strtolower(preg_replace("#([a-z])([A-Z])#", '$1-$2', $matches[2]));

        if($method == "get"){
            return $this->getOption($option);
        } else if ($method == "set") {
            $this->setOption($option, $arguments);
        }

        return null;
    }

    /**
     * @param $name
     * @param array|null $args
     * @throws \Exception
     */
    public function setOption($name, $args = null)
    {

        if(!isset(self::$_validOptions[$name])){
            throw new \Exception("Wkhtmltopdf : '$name' is not a valid option");
        }

        if(count($args) != count(self::$_validOptions[$name])){
            throw new \Exception(sprintf("Wkhtmltopdf : the option '%s' expects %s args (%s) ",
                $name,
                count(self::$_validOptions[$name]),
                implode(', ', self::$_validOptions[$name])
            ));
        }

        $this->_options[$name] = $args;
    }

    /**
     * @param $name
     * @return null
     */
    public function getOption($name)
    {
        return isset($this->_options[$name]) ? $this->_options[$name] : null;
    }

    /**
     * @param $input
     * @param $output
     * @return string
     */
    public function getCommand($input, $output)
    {
        $command = self::$bin . " ";

        foreach($this->_options as $name => $args){
            array_walk($args, function(&$item){
                $item = '"' . $item . '"';
            });
            $command.= "--$name " . implode(" ", $args) . " ";
        }

        $command.= " $input";
        $command.= " $output";

        return $command;
    }

    /**
     * @param $input
     * @param $output
     * @return array
     */
    public function run($input, $output)
    {
        return $this->_exec($this->getCommand($input, $output));
    }

    /**
     * @param $cmd
     * @return array
     */
    protected function _exec($cmd)
    {
        exec($cmd, $output, $return);
        return array(
            "cmd" => $cmd,
            "output" => $output,
            "return" => $return,
        );
    }
}