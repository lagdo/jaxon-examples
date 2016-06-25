<?php

require (__DIR__ . '/vendor/autoload.php');

use Jaxon\Jaxon;
use Jaxon\Response\Response;

$jaxon = Jaxon::getInstance();

// $jaxon->setOption('core.debug.on', true);
$jaxon->setOption('core.prefix.class', '');

$jaxon->setOption('toastr.options.closeButton', true);
$jaxon->setOption('toastr.options.positionClass', 'toast-bottom-right');

// Add class dirs
$jaxon->addClassDir(__DIR__ . '/classes/simple/app');
$jaxon->addClassDir(__DIR__ . '/classes/simple/ext');

// Register objects
$jaxon->registerClasses();

// Process the request, if any.
$jaxon->processRequest();

?>
<script type='text/javascript'>
    /* <![CDATA[ */
    window.onload = function() {
        // call the helloWorld function to populate the div on load
        Test.App.sayHello(0);
        // call the setColor function on load
        Test.App.setColor(jaxon.$('colorselect1').value);
        // Call the HelloWorld class to populate the 2nd div
        Test.Ext.sayHello(0);
        // call the HelloWorld->setColor() method on load
        Test.Ext.setColor(jaxon.$('colorselect2').value);
    }
    /* ]]> */
</script>
                        <div style="margin:10px;" id="div1">
                            &nbsp;
                        </div>
                        <div class="medium-4 columns">
                            <select class="form-control" id="colorselect1" name="colorselect1"
                                onchange="Test.App.setColor(jaxon.$('colorselect1').value); return false;">
                                <option value="black" selected="selected">Black</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="medium-8 columns">
                            <button class="button radius" onclick='Test.App.sayHello(0); return false;' >Click Me</button>
                            <button class="button radius" onclick='Test.App.sayHello(1); return false;' >CLICK ME</button>
                            <button class="button radius" onclick="Test.App.showDialog(); return false;" >PgwModal Dialog</button>
                        </div>

                        <div style="margin:10px;" id="div2">
                            &nbsp;
                        </div>
                        <div class="medium-4 columns">
                            <select class="form-control" id="colorselect2" name="colorselect2"
                                onchange="Test.Ext.setColor(jaxon.$('colorselect2').value); return false;">
                                <option value="black" selected="selected">Black</option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                            </select>
                        </div>
                        <div class="medium-8 columns">
                            <button class="button radius" onclick="Test.Ext.sayHello(0); return false;" >Click Me</button>
                            <button class="button radius" onclick="Test.Ext.sayHello(1); return false;" >CLICK ME</button>
                            <button class="button radius" onclick="Test.Ext.showDialog(); return false;" >Bootstrap Dialog</button>
                        </div>