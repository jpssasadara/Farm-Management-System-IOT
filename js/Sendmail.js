var http=require('http');
var nodemailer=require('nodemailer');

var transporter = nodemailer.createTransport({
	service: 'gmail',
	auth:{
		user:'littlestaralbum@gmail.com',
		pass: 'jqwaswcextlopkig'
	}
});
var mailOption ={
	from: 'littlestaralbum@gmail.com',
	to: 'dilisuru22@gmail.com',
	subject: 'Sending Email usimg Node.js',
	text: 'that was easy'
};
http.createServer(function(req,res){
		transporter.sendMail(mailOption, function(error, info){
		if (error) {
            return console.log(error);
        }
		else{
        console.log('Message sent: '+info.response);
		res.end("Done");
		}
	});


}).listen(8080);