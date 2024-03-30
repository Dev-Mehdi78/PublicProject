<?php
ini_set("soap.wsdl_cache_enabled", "0");
$result = array();
function ListUnit(){
    try {
        $client = new SoapClient('http://192.168.100.214/WebService.asmx?WSDL');
        $result = $client -> ListUnit();

        $xml = iconv('utf-8', 'utf-16', $result->ListUnitResult->result);
        $array = new SimpleXMLElement($xml);

        echo '<pre>';
        print_r($array);die();

    } catch (SoapFault $e) {
        echo $e->faultstring;
    }
}

function ListStock(){
    try {
        $client = new SoapClient('http://192.168.100.214/WebService.asmx?WSDL');
        $result = $client -> ListStock();

        $xml = iconv('utf-8', 'utf-16', $result->ListStockResult->result);
        $array = new SimpleXMLElement($xml);

        echo '<pre>';
        print_r($array);die;

    } catch (SoapFault $e) {
        echo $e->faultstring;
    }
}

function ListSaleType(){
    try {
        $client = new SoapClient('http://192.168.100.214/WebService.asmx?WSDL');
        $result = $client -> ListSaleType();

        $xml = iconv('utf-8', 'utf-16', $result->ListSaleTypeResult->result);
        $array = new SimpleXMLElement($xml);

        echo '<pre>';
        print_r($array);die;

    } catch (SoapFault $e) {
        echo $e->faultstring;
    }

}


/*ListUnit();*/
/*ListStock();*/
ListSaleType();




