pm.test("Status code is 200", function () {
    pm.response.to.have.status(200);
});

pm.test("Setiap artikel punya title, description, dan author", function () {
    let jsonData = pm.response.json();
    pm.expect(jsonData.articles).to.be.an("array");

    jsonData.articles.forEach(function(article) {
        pm.expect(article).to.have.property('title');
        pm.expect(article).to.have.property('description');
        pm.expect(article).to.have.property('author');
    });
});