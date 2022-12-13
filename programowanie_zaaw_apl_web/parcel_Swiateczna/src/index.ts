const pattern: string[] = [
    "x", "x", "x",
    "x", "x", "x",
    "x", "x", "x",
    "x", "x", "x",
    "x", "x", "x",
    "x", "x", "x",
    "x", "x", "x",
    "x", "x", "x",
];
const app: HTMLDivElement|null = document.querySelector("#app");
const dateNow = new Date();
const adventDays = 24;
const cookieName = "generatedJokes";
var JokeList: string[] = [];
0
function getCookie(cname: string) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
    return "";
}                    
                
window.onload = async ()=>{
    generateJokes();
    // document.querySelector("#app")!.innerHTML = post.value;
}

async function generateJokes (){
    if(getCookie(cookieName) == ""){
        var posts = [];
        for(var i = 0; i < adventDays; i++){
            const req = await fetch("https://api.chucknorris.io/jokes/random");
            var post = await req.json();
            posts.push(post.value);
        }
        posts.forEach((el)=>{
            console.log(el);
        })
        document.cookie = "generatedJokes=true;";
        // console.log(JSON.stringify(posts));  
        document.cookie = "Jokes="+JSON.stringify(posts)+";";
        document.cookie = "Opened=";
    }
    var JokesCookie = getCookie("Jokes");
    var temp = JokesCookie.split('","');
    temp.forEach((el)=>{
        el = el.replace(/[^\w\s]/gi, '');
        JokeList.push(el);
    });
    generatePattern();
}

function generatePattern(){
    for(var i = 0; i < pattern.length; i++){
        var temp = document.createElement("div");
        temp.id = ""+(i+1);
        temp.innerHTML = "<span>"+(i+1)+"</span>";
        temp.innerHTML += `<p>${i+1 + ". " +JokeList[i]}</p>`
        var openedCookies = getCookie("Opened");
        if(i < dateNow.getDate()) temp.className = "adventGift adventGiftAvailable";
        else temp.className = "adventGift adventGiftUnavailable";
        openedCookies.split(',').forEach((el)=>{
            if(el == "") return;
            if(parseInt(el) == i+1){
                (app!.children[0]).innerHTML += `<p>${el}</p>`
                temp.innerHTML = "✔";
                temp.setAttribute("class", "adventGift");
            }
        });
        (app!.children[1]).appendChild(temp);
    }
    document.querySelectorAll(".adventGiftAvailable").forEach((el)=>{
        el.addEventListener("click", (event)=>{
            console.log(event.target);
            var div = event.target as HTMLDivElement;
            var openedCookie = getCookie("Opened");
            div.setAttribute("class", "adventGift");
            var Joke = (div.children[1] as HTMLInputElement).innerHTML;
            openedCookie += Joke
            app!.children[0].innerHTML += `<p>${Joke}</p>`;
            div.innerHTML = "✔";
            document.cookie = "Opened="+openedCookie+",";
        })
    });
    document.querySelectorAll(".adventGiftUnavailable").forEach((el)=>{
        el.addEventListener("click", (event)=>{
            alert("Jeszcze nie możesz otworzyć tego!");
        })
    });
}
console.log("Generated Jokes: "+getCookie("generatedJokes"));
