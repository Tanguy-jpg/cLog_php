<!-- script -->
<script type="text/javascript">

let consoleInfo = <?php echo json_encode($consoleInfo); ?>; //Get Array in JSON from PHP
console.log("Console PHP:");
console.log(consoleInfo);

for(let i=0; i <= consoleInfo.length-1; i++){
        // Create p
    let newP = document.createElement("p");
    let newContent = document.createTextNode(consoleInfo[i]["elem"]);
    newP.appendChild(newContent);
    document.querySelector('#console-logs').appendChild(newP);              //Add New <p> in the console-php
        // Create hr
    let newHr = document.createElement("hr");
    document.querySelector('#console-logs').appendChild(newHr);
}

let consoleP = document.querySelectorAll('#console-logs p'); //Get all p-logs from console-php
let consoleParr = Array.from(consoleP); //convert NodeList to Array

for(let i=0; i <= consoleP.length-1; i++){
    consoleInfo[i]["type"]=="boolean"? consoleParr[i].style="color:var(--console-bool)":'';
    consoleInfo[i]["type"]=="integer"? consoleParr[i].style="color:var(--console-numbers)":'';
    consoleInfo[i]["type"]=="double"? consoleParr[i].style="color:var(--console-numbers)":'';
    consoleInfo[i]["type"]=="array"? consoleParr[i].style="color:var(--console-arr)":'';
    consoleInfo[i]["type"]=="object"? consoleParr[i].style="color:var(--console-obj)":'';
    consoleInfo[i]["type"]==("resource"|| "resource (closed)")? consoleParr[i].style="color:var(--console-resource)":'';
    consoleInfo[i]["type"]==("NULL" || "unknown type")? consoleParr[i].style="color:var(--console-null)":'';
}

const displayConsole = () => document.querySelector('#console-php').classList.toggle("consoleToggle");
</script>