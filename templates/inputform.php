<h2>Add new data</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-row cf">
        <div class="form-col-left" > <label for="mrk">Brand</label> </div>
        <div class="form-col-right"> <input type="text" name="mrk" id="mrk" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="typ">Type</label> </div>
        <div class="form-col-right"> <input type="text" name="typ" id="typ" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="cpu">Processor</label> </div>
        <div class="form-col-right"> <input type="text" name="cpu" id="cpu" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="ram">Memory</label> </div>
        <div class="form-col-right"> <input type="text" name="ram" id="ram" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="stg">Storage</label> </div>
        <div class="form-col-right"> <input type="text" name="stg" id="stg" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="gpu">Graphic</label> </div>
        <div class="form-col-right"> <input type="text" name="gpu" id="gpu" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="hrg">Price</label> </div>
        <div class="form-col-right"> <input type="text" name="hrg" id="hrg" required> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left" > <label for="img">Picture</label> </div>
        <div class="form-col-right"> <input class="custom-file-input" type="file" name="img" id="img"> </div>
    </div>
    <div class="form-row cf">
        <div class="form-col-left"> <button onclick="AbortInput()">Cancel</button> </div>
        <div class="form-col-right"> <button type="submit" name="inputData">Input Data</button> </div>
    </div>
</form>