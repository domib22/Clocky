function getUsers() {
    const apiUrl = "http://localhost:8002";
    const $list = $('.users-list');

    $.ajax({
        url : apiUrl + '/?page=users',
        dataType : 'json'
    })
    .done((res) => {
        $list.empty();
        
        res.forEach(el => {
            $list.append(`<tr>
                        <td>${el.id}</td>
                        <td>${el.email}</td>
                        <td>${el.name}</td>
                        <td>${el.surname}</td>
                        </tr>`);
        });
    });
}