const posts=[
    {title :" post one" , body:"this is post ine"},
    {title : "post two", body :"this is post two"}
];

function getPosts() {
    setTimeout(() => {
        let output=' ';
        posts.forEach((post,index)=>{
            output+=`<li>${post.title}</li>`
        });
        document.body.innerHTML=output;
    },1000);
}

function createPosts(post,callback) {
    setTimeout(() => {
    posts.push(post);
    callback();
    },2000);
}

createPosts({title:'post three',body:'this is post three'},getPosts()
);