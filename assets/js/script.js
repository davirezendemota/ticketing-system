const formTask = document.querySelector(".form__task");
const formTaskName = formTask.querySelector(".form__task__name");
const formTaskDesc = formTask.querySelector(".form__task__description");
const btnFormTask = formTask.querySelector(".form__btn");

// console.log(formTask);
// console.log(formTaskName);
//console.log(formTaskDesc);
// console.log(btnFormTask);

// SEND AJAX FORM
function sendForm(e) {
    e.preventDefault();

    let name = formTaskName.value;
    let description = formTaskDesc.value;
    
    let ajax = new XMLHttpRequest();
    let params = `name=${name}&description=${description}`;

    ajax.open("POST", "assets/php/ajax.php");
    // HEADER 
    ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    ajax.onreadystatechange = () => {
        if(ajax.readyState === 4 && ajax.status === 200){
            console.log(ajax.responseText);
        } else {
            //console.log(ajax.responseText);
        }
    };
    // SEND PARAMETERS TO PHP
    ajax.send(params);
}

// function deletaAnexo(id){
//     //AJAX
//     var ajax = new XMLHttpRequest();
//     ajax.open("POST", '<?= $url ?>/ajax.php', true);
//     ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     ajax.send("id="+id+"&funcao=deletaAnexo");
//     ajax.onreadystatechange = function() {
//         if (ajax.readyState == 4 && ajax.status == 200) {
//             //let data = JSON.parse(ajax.responseText);  
//             //Decrementa valor total
//             document.getElementById('totalAnexos').innerHTML = document.getElementById('totalAnexos').innerHTML - 1;                  
//         } else {
//             console.log(ajax.responseText);
//         }
//     }
// }


formTask.addEventListener('submit', sendForm, false);