function validate_form(){
    var name=document.form_data.full_name_evaluated.value;
    var job_side=document.form_data.job_side_evaluated.value;
    var period_assessment=document.form_data.period_assessment.value;

    if (name==null || name=="" || job_side==null || job_side=="" || period_assessment==null || period_assessment==""){
        alert("فیلد های ستاره دار نمیتوانند خالی باشند.");
        return false;
    }

}