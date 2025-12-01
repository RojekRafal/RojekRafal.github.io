async function loadPosts() {
    const container = document.getElementById("posts");

    try {
        const response = await fetch("posts.json");
        const data = await response.json();
        const posts = data.posts;

        container.innerHTML = "";

        posts.forEach(post => {
            const div = document.createElement("div");
            div.classList.add("post");

            div.innerHTML = `
                <h2>${post.title}</h2>
                <p><i>${post.date}</i></p>
                <p>${post.content.substring(0, 150)}...</p>
                <a href="post.html?id=${post.id}">Czytaj więcej</a>
            `;

            container.appendChild(div);
        });

    } catch (error) {
        container.innerHTML = "<p>Błąd wczytywania postów.</p>";
    }
}

loadPosts();
