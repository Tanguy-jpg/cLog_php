<?php
$consoleInfo = [];

function cLog($elem){
    array_push($GLOBALS["consoleInfo"], ['type'=> gettype($elem), 'elem'=>$elem]);
};

?>

<!-- visual -->
<div id="console-php">
    <h2>Console PHP</h2>
    <p class="console-info">vous pouvez accéder aux données de manière plus détaillé dans la console du navigateur</p>
    <section id="console-instruction">
        <p class="console-string">• string</p>
        <p class="console-integer">• integer</p>
        <p class="console-float">• float</p>
        <p class="console-bool">• Boolean</p>
        <p class="console-arr">• Array</p>
        <p class="console-obj">• Object</p>
        <p class="console-null">• NULL</p>
        <p class="console-resource">• Resource</p>
    </section>

    <section id="console-logs">
    </section>
</div>
<input type="button" value="open/close" id="console-close" onclick="displayConsole()">

<style>
    :root{
        --console-numbers: #7d7365;
        --console-bool: #a7861d;
        --console-arr: #006d04;
        --console-obj: #9c0089;
        --console-null: #a70000;
        --console-resource: #0003b8;
    }
    #console-php{
        font-family: sans-serif;
        position: fixed;
        height: 50vh;
        width: 60vh;
        background: rgb(214 214 214);
        color:rgb(0, 0, 0);
        border-radius: 5px;
        border: solid 0.5vh grey;
        right: 0;
        top:0;
        overflow: scroll;
        z-index: 99999999999999999999;
    }
    #console-close{
        position:fixed;
        right:2.2vh;
        top:1vh;
        z-index: 999999999999999999999;
        opacity: 60%;
        transition: 0.3s;
    }
    #console-close:hover{
        opacity: 100%;
        transition: 0.3s;
    }
    .consoleToggle{
        transform: scale(0)
    }
    #console-php>h2{
        width:100%;
        text-align:center;
        margin:0;
        font-size:3vh
    }

    #console-instruction{
        display: flex;
        gap:10px;
        align-content:center;
        justify-content:center;
        border: thick double grey;
        font-size:1.7vh;
    }
    .console-info{
        width:100%;
        text-align:center;
        font-size:1.2vh;
    }
    .console-integer, .console-float{
        color:var(--console-numbers);
    }
    .console-bool{
        color:var(--console-bool);
    }
    .console-arr{
        color:var(--console-arr);
    }
    .console-obj{
        color:var(--console-obj);
    }
    .console-null{
        color:var(--console-null);
    }
    .console-resource{
        color:var(--console-resource);
    }
</style>
