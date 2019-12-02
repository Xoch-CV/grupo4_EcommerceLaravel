
let listado




fetch('http://127.0.0.1:8000/api/events')
.then(function(response){
return response.json()
})
.then(function(events){
    events.data.map(function(event){

    })
})