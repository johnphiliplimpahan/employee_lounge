(function($){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let ShowActionButton = function(container,button,footer,route){
            let displayToggle = "d-none";
            let cancelBtn = footer.find('button[type="button"]');
            let saveBtn = footer.find('button[type="submit"]');
            let form = container.find('form');
            let inputs = form.find('input , select');

            container.hover( //Toggles the display of edit button when hovered
                function(){
                    button.removeClass(displayToggle);
                },
                function(){
                    button.addClass(displayToggle);
                }
            );

            button.click(function(e){ //Show card footer when edit button is clicked
                e.preventDefault();
                footer.removeClass(displayToggle);
                
                inputs.each(function(i,v){
                    $(this).attr("disabled",false);
                });
                
            });

            cancelBtn.click(function(){ //Hide card footer when cancel button is clicked
                
                inputs.each(function(i,v){
                    $(this).attr("disabled",true);
                });

                footer.addClass(displayToggle);

                
            });

            saveBtn.click(function(e){
                e.preventDefault();
                Data.save(route,form.serialize());
            });
        }
    
    
    
    let Data = {
        save : function(route,data){
            
            $.ajax({
                url : route,
                method : "POST",
                data: data
            }).done(function(response){
                console.log(data);
            });
        }
    }

   let PersonalInformation = {

    init : function(){
        let container = $("#personal-information");
        let editBtn = $("#pi_editBtn");
        let footer = container.siblings();
        let route = "personal-information";

        ShowActionButton(container,editBtn,footer,route);

        }

   }

   let ContactInformation = {

    init : function(){
        let container = $("#contact-information");
        let editBtn = $("#ci_editBtn");
        let footer = container.siblings();
        let route = "contact-information";

        ShowActionButton(container,editBtn,footer,route);

        }

    }

    let WorkInformation = {

    init : function(){
        let container = $("#work-information");
        let editBtn = $("#wi_editBtn");
        let footer = container.siblings();
        let route = "work-information";

        ShowActionButton(container,editBtn,footer,route);

        }

    }

    let LocationInformation = {

    init : function(){
        let container = $("#location-information");
        let editBtn = $("#li_editBtn");
        let footer = container.siblings();
        let route = "location-information";

        ShowActionButton(container,editBtn,footer,route);

        }

    }

   PersonalInformation.init();
   ContactInformation.init();
   WorkInformation.init();
   LocationInformation.init();

})(jQuery);