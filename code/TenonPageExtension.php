<?php

class TenonPageExtension extends DataExtension {

   public function updateCMSFields(FieldList $fields) {
         $fields->addFieldsToTab("Root.Accessibility", array(
            new LiteralField("tenontest","<h2>Tenon response for this page to go here</h2>")
         ));

   }
/*    public function onBeforeWrite() {
      parent::onBeforeWrite();
//die("Yeow");
      //Debug::message("Extension");die();
   //   console.log("hello");
//   Debug::message("DIE");
//      die();
$link = $this->owner->Link();
Debug::message($link);//die();
//$httpMethod = "GET";
$source = Director::test($link);
Debug::message($source);die();
//console.log($source);
//Debug::show($source);die();
//$source = "<img src='jpeg.jpg' />";

$processor = new TenonProcessor();
$processor->analyse($source);
        $link = $this->owner->Link();
        //Debug::message($link);die();
        $source = Director::test($link, null, null, 'GET');
        Debug::message($source);die();
        $processor = new TenonProcessor();
        $processor->analyse();
    } */

}
