class DecodeQr{

    decodeQr(qrCode){
        var response=new Object();
        var split = qrCode.split("|");
        console
        response.btCode =split[0];
        response.description = split[1];

        return response;
    }
}

module.exports= DecodeQr;