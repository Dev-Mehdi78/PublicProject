function validate_form(){
    var name=document.form_data.fullname_to_be_evaluated.value;
    var job_side=document.form_data.job_side_to_be_evaluated.value;
    var perio_to_be_evaluated =document.form_data.perio_to_be_evaluated.value;
    var unit_to_be_evaluated=document.form_data.unit_to_be_evaluated.value;
    var date=document.form_data.date.value;
    var fullname_assessor=document.form_data.fullname_assessor.value;
    var job_side_assessor=document.form_data.job_side_assessor.value;
    var unit_assessor=document.form_data.unit_assessor.value;

    if (name ==null || name=="" || job_side==null || job_side=="" || perio_to_be_evaluated==null ||
        perio_to_be_evaluated=="" || unit_to_be_evaluated==null || unit_to_be_evaluated=="" || date==null ||
        date=="" || fullname_assessor==null || fullname_assessor=="" || job_side_assessor==null || job_side_assessor==""|| unit_assessor==null || unit_assessor==""){
        alert("فیلد های ستاره دار نمیتوانند خالی باشند.");
        return false;
    }
}