<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
$.ajax({
     url: 'http://api.cortical.io/rest/text/keywords?retina_name=en_associative',
     method: 'POST',
     contentType: 'application/json',
     headers: {"api-key": "b0102210-27d7-11e9-bb65-69ed2d3c7927" },
     processData: false,
     data: "The men died in an apparent accident after a traditional honeymoon ceremony in Ethiopia.",
     success:function(data){
          console.log(data);
     }
   });
 });
</script>
