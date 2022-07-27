async function showUser (id) {
    const res = await fetch(`/master/usuario/${id}`)
        .then(response => response.json())
    document.querySelector('#modal').innerHTML = res
}
