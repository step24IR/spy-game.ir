


function game_wold() {

    console.log("game_wold");
}

function game_family() {

    console.log("game_family");

    var page_first = document.getElementById("page_first");
    var page_friend = document.getElementById("page_friend");

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    page_first.style.display = 'none';
    page_friend.style.display = 'block';
}

function create_game_friend() {

    console.log("create_game_friend");

    var page_friend = document.getElementById("page_friend");
    var create_game_friend = document.getElementById("create_game_friend");

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    page_friend.style.display = 'none';
    create_game_friend.style.display = 'block';
}

function join_game_friend() {

    console.log("join_game_friend");

    var page_friend = document.getElementById("page_friend");
    var join_game_friend = document.getElementById("join_game_friend");

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    page_friend.style.display = 'none';
    join_game_friend.style.display = 'block';
}