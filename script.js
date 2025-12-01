async function loadPosts() {
    const container = document.getElementById("posts");

    try {
        const response = await fetch("posty.json");
        if (!response.ok) throw new Error("Nie można pobrać posts.json");

        const data = await response.json();
        const posts = data.posts;

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

    } catch (error) {
        container.innerHTML = `<p>Błąd wczytywania postów: ${error.message}</p>`;
    }
}

loadPosts();
