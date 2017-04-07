@extends('partials.master') @section('content')
<section >
    <div id="app" class="auto-container">
        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header">Abstract Submission Format NULISTICE 2018</h2>
        </div>
        <div>
            <div class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <p class="text-align-just abstract">
                    <ul >
                        <li><i class="fa fa-circle"></i> Title (Font 14 , Times New Romans, bold),</li>
                        <li><i class="fa fa-circle"></i> Surname and initials of author and co-authors, followed by their respective institution address (Font
                            12 , Times New Romans),</li>
                        <li><i class="fa fa-circle"></i> Abstract (Font 12 (Times New Romans) and word count up to 300,</li>
                        <li><i class="fa fa-circle"></i> Line space 1.5,</li>
                        <li><i class="fa fa-circle"></i> Key words: Five, separated by a semi-colon(;) and first letter upper case,</li>
                        <li><i class="fa fa-circle"></i> Corresponding author: (Font 12, Times New Romans):
                            <ul>
                                <li><i class="fa fa-circle-thin"></i> Identify by * </li>
                                <li><i class="fa fa-circle-thin"></i> Email address</li>
                                <li><i class="fa fa-circle-thin"></i> Telephone and Fax</li>
                            </ul>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="sec-title wow fadeInUp text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h3>Article Title; Times New Roman; Size-14; Line Spacing: 1.5 Paragraph Spacing: Above Paragraph-10pt, Below Paragraph-10pt</h3>
            <h4>Authors’ information with their institution and post box</h4>
        </div>

        <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><strong><i>Abstract</i></strong></p>
        <hr>

        <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            An abstract is a brief, comprehensive summary of the contents of the article; it allows readers to survey the contents of
            an article quickly and, like a title, it enables persons interested in the document to retrieve it from abstracting
            and indexing databases. Most scholarly journals require an abstract. Consult the instructions to authors or web
            page of the journal to which you plan to submit your article for any journal-specific instructions. A well-prepared
            abstract can be the most important single paragraph in an article. Most people have their first contact with
            an article by seeing just the abstract, usually in comparison with several other abstracts, as they are doing
            a literature search.
        </p>

        <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            Readers frequently decide on the basis of the abstract whether to read the entire article. The abstract needs to be dense
            with information. By embedding key words in your abstract, you enhance the user’s ability to find it. Do not
            exceed the abstract word limit of the journal to which you are submitting your article. Word limits vary from
            journal to journal and typically range from 250 to 300 words. For information on how abstracts are used to retrieve
            articles, consult Record Structure for APA Databases or any International Standard journals for information.
        </p>
        <hr>

        <p class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <strong>Keywords: </strong> Upper case; Semi-colon; Paper template; Abstract; Keywords; Introduction Corresponding
            author: Identify by * Email address; Telephone and Fax
        </p>
        <div class="text-right margin-bottom-10 margin-top-20 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
            <a href="{{url('download?file-name=abstract')}}" class="download-btn theme-btn padding-5"><span class="fa fa-file-pdf-o"></span> DOWNLOAD Abstract Guide</a>
        </div>
    </div>
</section>
@stop 

