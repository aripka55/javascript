let myButtons = document.getElementsByTagName("button");

//Add button is the first of the buttons, so we can grab that one
let addButton = myButtons[0];

//Create an onclick event for the Add button
addButton.onclick = function () { addToDoItem() };

//Create a function to add the todo item
function addToDoItem() {

    //Grab the <ul>
    let incompleteUl = document.getElementById("incomplete-tasks");

    //Create the child <li> object
    let incompleteLi = document.createElement("li");

    //Create the child <input> for checkbox
    let incompleteInputCheckbox = document.createElement("input");

    //Create and set type attribute for <input>
    incompleteInputCheckbox.setAttribute("type","checkbox");

    //Create and set the checkbox function to move task to completed section
    incompleteInputCheckbox.onclick = function() {addtoCompeleteLi(this)};

    //Create the child <label> object
    let incompleteLabel = document.createElement("label");

    //Grab the Add textbox value and set it as text of <label>
    let addText = document.getElementById("new-task").value;
    document.getElementById("new-task").value = "";
    incompleteLabel.innerHTML = addText;

    //Create the child <input> for the textbox and set attribute
    let incompleteInputTextbox = document.createElement("input");
    incompleteInputTextbox.setAttribute("type","text");

    //Create the child <button> for edit
    let incompleteButtonEdit = document.createElement("button");
    incompleteButtonEdit.setAttribute("class","edit"); //Creates class="edit"

    //incompleteButtonEdit.setAttribute("onclick", "editLi(this)");
    incompleteButtonEdit.onclick = function () { editLi(this) };
    incompleteButtonEdit.innerHTML = "Edit"; //Creates the Edit text for the button

    //Create the child <button> for delete
    let incompleteButtonDelete = document.createElement("button");
    incompleteButtonDelete.setAttribute("class","delete"); //Creates class="edit"
    incompleteButtonDelete.setAttribute("onclick","deleteLi(this)");
    incompleteButtonDelete.innerHTML = "Delete"; //Creates the Edit text for the button

    //Append the child <input> checkbox to <li>
    incompleteLi.appendChild(incompleteInputCheckbox);

    //Append the child <label> to the <li>
    incompleteLi.appendChild(incompleteLabel);

    //Append the child <input> checkbox to <li>
    incompleteLi.appendChild(incompleteInputTextbox);

    //Append the children <button> edit and then delete to <li>
    incompleteLi.appendChild(incompleteButtonEdit);

    incompleteLi.appendChild(incompleteButtonDelete);
    //Append the child <li> to the <ul>

    incompleteUl.appendChild(incompleteLi);
}//addto function


    //Create the delete li function
function deleteLi(item) {
    //Grab parent <li>
    let li = item.parentNode;
    ul = li.parentNode;
    //Remove the child from parent
    ul.removeChild(li);
}//end delteli function

function editLi(item) {
    //Figure out what <li> to change
    let li = item.parentNode;
    // Change the <li> class to "edit"
    li.setAttribute("class","editMode");
    // Get the innerHTML of the label
    let labelText = li.childNodes[1].innerHTML;
    // Put the labels text into the value of the textbox
    let textBox = li.childNodes[2];
    //textBox.value = labelText;
    textBox.setAttribute("value", labelText);
    //change the edit buttons text to save
    item.innerHTML ="Save";
    //change onclick event fo r save button
    item.onclick = function() {saveLi(this)};
}//end editli function

function addtoCompeleteLi(item){

    //get the <ul> of completed tasks
    ul = document.getElementById("completed-tasks");

    //get the <li> for child
    let moveChild = item.parentNode;

    //append child to new <l>
    ul.appendChild(moveChild);

    //set onclick even to set to asstoinconplete li
    item.onclick = function() {addtoIncompleteCompeleteLi(this)};

}//end addtocompletli

function addtoIncompleteCompeleteLi(item){

    ul = document.getElementById("incomplete-tasks");

    let moveChild = item.parentNode;

    ul.appendChild(moveChild);

    item.onclick = function() {addtoCompeleteLi(this)};


}//end addtoincompleteli

function saveLi (item) {

    let li = item.parentNode;

    li.setAttribute("class","");

    labelText = li.childNodes[1];

    textBox = li.childNodes[2].value;

    labelText.innerHTML= textBox;

    item.innerHTML ="Edit";

    item.onclick = function() {editLi(this)};

}