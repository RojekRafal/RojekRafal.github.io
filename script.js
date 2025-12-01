// script.js
function loadPosts() {
    const container = document.getElementById("posts");
    container.innerHTML = "";

    posts.forEach(post => {
        const div = document.createElement("div");
        div.classList.add("post");
        div.innerHTML = `
            <h2><a href="post.html?id=${post.id}">${post.title}</a></h2>
            <p><i>${post.date}</i></p>
            <p>${post.content.substring(0, 150)}...</p>
        `;
        container.appendChild(div);
    });
}

document.addEventListener("DOMContentLoaded", loadPosts);
