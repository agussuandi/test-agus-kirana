sendRequest = async (method, url, data, isJson = true) => {
    if (method === 'GET') {
        var request = await fetch(url, {
            headers: {
                isFetch: true
            }
        })
    }
    else {
        var request = await fetch(url, {
            method: method,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
    }
    return await isJson ? request.json() : request.text()
}