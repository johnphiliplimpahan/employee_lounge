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
            let inputs = form.find('input , select, textarea');

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
                form.trigger("reset");
                let small = form.find("small");

                inputs.each(function(i,v){
                    $(this).attr("disabled",true);
                });

                small.each(function(){
                    $(this).remove();
                });
                
                footer.addClass(displayToggle);

                
            });

            saveBtn.click(function(e){
                e.preventDefault();
                let promise = Data.save(route,form);
                
                Spinner.start(saveBtn);
                
                promise.done(function(response){
                    if(response === ''){
                        let el = form.find("small");
                        $.each(el,function(){
                            $(this).remove();
                        });

                        let small = form.find("small");

                        inputs.each(function(i,v){
                            $(this).attr("disabled",true);
                        });

                        small.each(function(){
                            $(this).remove();
                        });

                        inputs.each(function(){
                            $(this).val($(this).val());
                        });

                        Spinner.stop(saveBtn);
                        footer.addClass(displayToggle);
                    }else{
                        $.each(response,function(name,error){
                            let el = form.find(" input[name='"+name+"'], select[name='"+name+"'], textarea[name='"+name+"']");
                            el.after('<small class="form-control-feedback text-danger">'+error+'</small>');
                        });
                        Spinner.stop(saveBtn);
                    }
                });

            });
        }
    
    let Spinner = {
        start : function(button){
            button.attr("disabled",true);
            button.append('<i class="fa fa-cog fa-spin ml-2" style="font-size:14px"></i>');
        },
        stop : function(button){
            button.attr("disabled",false);
            button.find('i').remove();
        }
    }
    
    
    let Data = {
        save : function(route,form){
            
            return $.ajax({
                url : route,
                method : "POST",
                data: form.serialize()
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

    let Page = {
        load : function(){
            PersonalInformation.init();
            ContactInformation.init();
            WorkInformation.init();
            LocationInformation.init();
        },
        profileChanger : function(){
            let actions = $("#profile_image_actions");

            $("#profile_overlay form input[type='file']").change(function(){
                
                if(actions.hasClass('d-none')){
                    actions.removeClass('d-none');
                }else{
                    actions.addClass('d-none');
                }
                
            });

            $("#profile_overlay form button[type='reset']").click(function(){
                if(!actions.hasClass('d-none')){
                    actions.addClass('d-none');
                }
            });

        }
    }
   
    Page.load();
    Page.profileChanger();

})(jQuery);