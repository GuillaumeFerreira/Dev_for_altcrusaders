fetch("https://bscscan.com/token/generic-tokentxns2?m=normal&contractAddress=0x2456e44C617d6231bB06492Fa7337eE2f552BF61&a=0x62ed46357d2ddbfd23e772f36b256826a7b5e005&sid=4b11fca3e5685668a94fb566a12d941e&p=1",{method: "GET"})
.then(response => response.json())
.then(function(response) {

alert(response);



})