async function loadPosts() {
    const container = document.getElementById("posts");

    try {
        const response = await fetch("posty.xml");
        if (!response.ok) throw new Error("Nie można pobrać pliku XML");

        const xmlText = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(xmlText, "application/xml");

        const posts = xmlDoc.getElementsByTagName("post");
        container.innerHTML = "";

        Array.from(posts).forEach(post => {
            const id = post.getElementsByTagName("id")[0].textContent;
            const title = post.getElementsByTagName("title")[0].textContent;
            const date = post.getElementsByTagName("date")[0].textContent;
            const content = post.getElementsByTagName("content")[0].textContent;

            const div = document.createElement("div");
            div.classList.add("post");
            div.innerHTML = `
                <h2><a href="post.html?id=${id}">${title}</a></h2>
                <p><i>${date}</i></p>
                <p>${content.substring(0, 150)}...</p>
            `;
            container.appendChild(div);
        });

    } catch (error) {
        container.innerHTML = `<p>Błąd wczytywania postów: ${error.message}</p>`;
    }
}

loadPosts();
