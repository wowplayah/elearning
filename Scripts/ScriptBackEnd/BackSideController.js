var arrObjectCover = [];
var objCover = [];
var statusSaveOrEdit = 0;
$('.RegionInput').hide();

//Abstract Function-------------------------------------------------------
function uploadLogo(_saveOrEdit,_Icon){
    if(_saveOrEdit == 0){
        $('.managenews-after-uploadlogo').hide();   
    }else{
        var div;
        div = '<div style="margin-bottom:10px;border-radius:3px;height:500px;background: no-repeat url(Content/PackageBakcEnd/ContentPicture/'+_Icon+') 50% / 100%;;"></div>';
        $(".managenews-logo-preview").html(div);
        $('.managenews-logo-preview').slideDown(200);
        $('.managenews-after-uploadlogo').show();
    }
    arrObjectCover = [];
    $('.managenews-logo-trash').off('click').on('click', function(){
        arrObjectCover = [];
        $('.managenews-logo-preview').slideUp(200);
        $('.managenews-after-uploadlogo').hide();
    });

    $('#managenews-btn-upload-logo').off('change').on('change', function(){
        $('.managenews-logo-preview').html('<h3>Uploading...</h3>');
        arrObjectCover = [];
        var f = $("#managenews-btn-upload-logo")[0].files[0];

        var reader = new FileReader();

        reader.onload = function (readerEvt) {
            var binaryString = readerEvt.target.result;

            var fullPath = document.getElementById('managenews-btn-upload-logo').value;
            if (fullPath) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                objCover = { FileName: filename, FileExtension: filename.split(".")[1],FileUpload: btoa(binaryString) };
            }
            arrObjectCover.push(objCover);

            
            $("#managenews-btn-upload-logo").val("");
        };

        reader.readAsBinaryString(f);
        setTimeout(function () {        
            $(".managenews-logo-preview").html("");
            if (arrObjectCover[0].FileExtension != "jpg" &&  arrObjectCover[0].FileExtension != "png" && arrObjectCover[0].FileExtension != "jpeg") {
                arrObjectCover = [];
                alert('Bukan file gambar, jika yang ada masukan adaalah gambar Rename dengan nama yang wajar.');
            }else{
                var div;
                div = '<div style="margin-bottom:10px;border-radius:3px;height:500px;background: no-repeat url(data:image/' +arrObjectCover[0].FileExtension+';base64,' +arrObjectCover[0].FileUpload+') 50% / 100%;;"></div>';
                $(div).hide().appendTo(".managenews-logo-preview").slideToggle(200);
                //alert(JSON.stringify(arr[0].FileUpload));
                $('.managenews-logo-preview').slideDown(200);
                $('.managenews-after-uploadlogo').show();
                //alert(JSON.stringify(arrObjectCover));
            }
        }, 2000);

    });
}

function saveToCloud(_key){
     $('.property-btn-save').off('click').on('click', function(){
            //alert('sadasd');
            var _type= $('.property-type').val();
            var _name = $('.property-name').val();
            var _address = $('.property-address').val();
            var _region = $('.property-region').val();
            var _descript = $('.property-description').val();
            var _status = $('.property-status').val();
            var base64 = null;
            var _price = $('.property-price').val();
            //alert(JSON.stringify(arrObjectCover[0]));
            if(arrObjectCover.length != 0){
                base64 = arrObjectCover[0].FileUpload;
            }
            
            //alert(arrObjectCover[0].FileUpload);
            //alert(statusSaveOrEdit);
            
            if(statusSaveOrEdit == 0){
                addProperty(_type,_name,_address,_region,_descript,_status,base64,_price);
            }else{
                updateProperty(_key,_type,_name,_address,_region,_descript,_status,base64,_price);
            }
     });
}

//Ajax Function-----------------------------------------------------------
function retrieveProperty(){
    $.ajax({
        url: "Views/BackSide/jsonRetrieveProperty.php",
        dataType: 'json',
        type: 'GET',
        contentType: 'application/json; charset=utf-8',
        async: true,
        processData: false,
        cache: false,
        success: function (data) {
            $('.retrieve-list').html("");
            //alert(JSON.stringify(data));
            if(data.error !== true){
                var no = 0;
                for(var i = 0; i < data.recorddata.length; i++){
                    no = i+1;
                    div = '<div class="col-lg-4" style="margin-bottom:20px;">\
                            <div class="list-group-item">\
                                <img class="img-circle" src="Content/PackageBakcEnd/ContentPicture/'+data.recorddata[i].Picture+'" alt="Generic placeholder image" width="140" height="140">\
                                <span class="btn btn-primary btn-sm">'+data.recorddata[i].Type+'</span>\
                                <h3 style="height:100px;">'+data.recorddata[i].Name.substr(0, 24)+'..</h3>\
                                <div class="list-group">\
                                    <div href="#" class="list-group-item">\
                                    <h4 class="list-group-item-heading">Description</h4>\
                                    <p class="list-group-item-text"><p>'+data.recorddata[i].Desc.substr(0,29)+'..</p></p>\
                                    </div>\
                                </div>\
                                <p>\
                                    <span class="btn btn-primary btn-edit-property" attr-no="'+i+'"><i class="fa fa-edit"></i> Edit</span>\
                                    <span class="btn btn-primary btn-delete-property" attr-no="'+i+'"><i class="fa fa-trash"></i> Delete</span>\
                                </p>\
                                </div>\
                            </div>';
                    $('.retrieve-list').append(div);  
                }

                $('.btn-delete-property').off('click').on('click', function(){
                    var no = $(this).attr('attr-no');
                    $('#myModalDelete').modal('toggle');
                    var Key = data.recorddata[no].Key;
                    $('.btn-deletelist').off('click').on('click', function(){
                        deleteProperty(Key);
                    });
                });

                $('.btn-edit-property').off('click').on('click', function(){
                    var no = $(this).attr('attr-no');

                    $('.property-type').val(data.recorddata[no].TypeID);
                    $('.property-name').val(data.recorddata[no].Name);
                    $('.property-address').val(data.recorddata[no].Address);
                    $('.property-region').val(data.recorddata[no].Region);
                    $('.property-description').val(data.recorddata[no].Desc);
                    $('.property-status').val(data.recorddata[no].StatusID);
                    $('.property-price').val(data.recorddata[no].Price);

                    $('.btn-insert-property').attr('click','1');
                    $('.btn-insert-property').html('Back to list');
                    
                    $('.RegionInput').slideToggle(200);
                    $('.RegionList').slideToggle(200);
                    
                    uploadLogo(1,data.recorddata[no].Picture)

                    statusSaveOrEdit = 1;
                    saveToCloud(data.recorddata[no].Key);
                });

            }else{
                $('.retrieve-list').html('<h3 class="text-center">Tidak ada data</h3>');
            }
        },
        error: function(xhr, status, error) {
          console.log(JSON.stringify(xhr));
          console.log(JSON.stringify(status));
          console.log(JSON.stringify(error));
        }
    }); 
}

function addProperty(_type,_name,_address,_region,_descript,_status,_base64,_price){
    var request = {
        Type:  _type,
        Name:  _name,
        Address:  _address,
        Region : _region,
        Description : _descript,
        Status : _status,
        Media:_base64,
        Price : _price,
    };
    //alert(JSON.stringify(request));
    $.ajax({
        url: "Views/BackSide/jsonInputProperty.php",
        dataType: 'json',
        type: 'POST',
        data: JSON.stringify(request),
        contentType: 'application/json; charset=utf-8',
        async: true,
        processData: false,
        cache: false,
        success: function (data) {
            //alert(JSON.stringify(data));
            if(data.error !== true){
                alert(data.message);
                $('.property-type').val(1);
                $('.property-name').val('');
                $('.property-address').val('');
                $('.property-region').val('');
                $('.property-description').val('');
                $('.property-status').val(1);
                $('.property-price').val('');
                arrObjectCover = [];
                
                $('.managenews-logo-preview').slideUp(200);
                $('.managenews-after-uploadlogo').hide();
                
                $('.btn-insert-property').attr('click','0');
                $('.btn-insert-property').html('Insert Property');
                $('.RegionInput').slideToggle(200);
                $('.RegionList').slideToggle(200);
                retrieveProperty();
            
        }else{
                alert(data.message);
            }
        },
        error: function(xhr, status, error) {
          console.log(JSON.stringify(xhr));
          console.log(JSON.stringify(status));
          console.log(JSON.stringify(error));
        }
    }); 
}


function updateProperty(_key,_type,_name,_address,_region,_descript,_status,_base64,_price){
    var request = {
        Key:_key,
        Type:  _type,
        Name:  _name,
        Address:  _address,
        Region : _region,
        Description : _descript,
        Status : _status,
        Media:_base64,
        Price : _price,
    };
    //alert(JSON.stringify(request));
    $.ajax({
        url: "Views/BackSide/jsonUpdateProperty.php",
        dataType: 'json',
        type: 'POST',
        data: JSON.stringify(request),
        contentType: 'application/json; charset=utf-8',
        async: true,
        processData: false,
        cache: false,
        success: function (data) {
            //alert(JSON.stringify(data));
            if(data.error !== true){
                alert(data.message);
                $('.property-type').val(1);
                $('.property-name').val('');
                $('.property-address').val('');
                $('.property-region').val('');
                $('.property-description').val('');
                $('.property-status').val(1);
                $('.property-price').val('');
                arrObjectCover = [];
                
                $('.managenews-logo-preview').slideUp(200);
                $('.managenews-after-uploadlogo').hide();
                
                $('.btn-insert-property').attr('click','0');
                $('.btn-insert-property').html('Insert Property');
                $('.RegionInput').slideToggle(200);
                $('.RegionList').slideToggle(200);
                retrieveProperty();
            
        }else{
                alert(data.message);
            }
        },
        error: function(xhr, status, error) {
          console.log(JSON.stringify(xhr));
          console.log(JSON.stringify(status));
          console.log(JSON.stringify(error));
        }
    }); 
}

function deleteProperty(_key){
    var request = {
        Key:_key
    };
    //alert(JSON.stringify(request));
    $.ajax({
        url: "Views/BackSide/jsonDeleteProperty.php",
        dataType: 'json',
        type: 'POST',
        data: JSON.stringify(request),
        contentType: 'application/json; charset=utf-8',
        async: true,
        processData: false,
        cache: false,
        success: function (data) {
            //alert(JSON.stringify(data));
        if(data.error !== true){
                retrieveProperty();
                $('#myModalDelete').modal('toggle');
        }else{
                alert(data.message);
            }
        },
        error: function(xhr, status, error) {
          console.log(JSON.stringify(xhr));
          console.log(JSON.stringify(status));
          console.log(JSON.stringify(error));
        }
    }); 
}

//pageLoad----------------------------------------------------------------
uploadLogo(0,null);

retrieveProperty();

$('.btn-insert-property').attr('click','0');
$('.btn-insert-property').off('click').on('click', function(){
    if($('.btn-insert-property').attr('click') == '0'){
        $('.btn-insert-property').attr('click','1');
        $('.btn-insert-property').html('Back to list');

        $('.property-type').val(1);
        $('.property-name').val('');
        $('.property-address').val('');
        $('.property-region').val('');
        $('.property-description').val('');
        $('.property-status').val(1);
        $('.property-price').val('');
        arrObjectCover = [];
        
        $('.managenews-logo-preview').slideUp(200);
        $('.managenews-after-uploadlogo').hide();

        saveToCloud(null);
        statusSaveOrEdit = 0;
        
    }else{
        $('.btn-insert-property').attr('click','0');
        $('.btn-insert-property').html('Insert Property');
    }
    $('.RegionInput').slideToggle(200);
    $('.RegionList').slideToggle(200);

});