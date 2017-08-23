
type = ['','info','success','warning','danger'];


function showNotification1(from, align, msg){
    	color = Math.floor((Math.random() * 4) + 1);

    	$.notify({
        	icon: "notifications",
        	message: msg

        },{
            type: type[color],
            timer: 4000,
            placement: {
                from: from,
                align: align
            }
        });
	}
