function validateUsername(username = 'erick'){
    const usernameRegex = '/^[a-zA-Z0-9@&_-]{6,32}$/';
    
    let wrong = usernameRegex.exec(usernameRegex);

    if(wrong){
        console.log(`Não é permitido o uso de ${wrong} no nome de usuário!`);
    }else{
        console.log('Ok');
    }
}