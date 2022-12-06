var loadMoreButton = document.querySelector(".load_more_button");
var isLoadedMore = false;
var dataRows = document.querySelectorAll(".data_rows");

if(dataRows.length>5){
    for (var i =5; i<dataRows.length; i++){
        dataRows[i].style.display = "none";
    }
}

loadMoreButton.onclick = changeTable;

function changeTable(){
    if (!isLoadedMore){
        for (var i =5; i<dataRows.length; i++){
            dataRows[i].style.display = "table-row";
        }
        loadMoreButton.textContent = "Load less";
        isLoadedMore = true;
    } else {
        for (var i =5; i<dataRows.length; i++){
            dataRows[i].style.display = "none";
        }
        loadMoreButton.textContent = "Load more";
        isLoadedMore = false;
    }
}