FOUND IN pytutor.js
getRealLabel(label) {
    if (this.params.lang === 'js' || this.params.lang === 'ts' || this.params.lang === 'ruby') {
      if (label === 'list') {
        return 'array';
      } else if (label === 'instance') {
        return 'object';
      } else if (label === 'True') {
        return 'true';
      } else if (label === 'False') {
        return 'false';
      }
    }

    if (this.params.lang === 'js') {
      if (label === 'dict') {
        return 'Map';
      } else if (label === 'set') {
        return 'Set';
      }
    } else if (this.params.lang === 'ruby') {
      if (label === 'dict') {
        return 'hash';
      } else if (label === 'set') {
        return 'Set'; // the Ruby Set class is capitalized
      } else if (label === 'function') {
        return 'method';
      } else if (label === 'None') {
        return 'nil';
      } else if (label === 'Global frame') {
        return 'Global Object';
      }
    } else if (this.params.lang === 'java') {
      if (label === 'None') {
        return 'null';
      } else if (label === 'True') {
        return 'true';
      } else if (label === 'False') {
        return 'false';
      }
    }

    // default fallthrough case if no matches above
    return label;
  }


FOUND IN opt-office-mix.js

var backend_script = null;
  if ($('#pythonVersionSelector').val() == '2') {
      backend_script = python2_backend_script;
  }
  else if ($('#pythonVersionSelector').val() == '3') {
      backend_script = python3_backend_script;
  }
  else if ($('#pythonVersionSelector').val() == 'js') {
      backend_script = js_backend_script;
  }
  else if ($('#pythonVersionSelector').val() == 'ts') {
      backend_script = ts_backend_script;
  }
  else if ($('#pythonVersionSelector').val() == 'ruby') {
      backend_script = ruby_backend_script;
  }
  else if ($('#pythonVersionSelector').val() == 'java') {
      backend_script = java_backend_script;
  }
  assert(backend_script);


Find out which Javascript Files are Missing:

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <script src="../js/jquery.min.js"></script>

    <script type="text/javascript" src="../jsPy_v3/d3.v2.min.js"></script>
<script type="text/javascript" src="../jsPy_v3/jquery-1.8.2.min.js"></script>

<script type="text/javascript" src="../jsPy_v3/jquery.ba-bbq.min.js"></script> <!-- for handling back button and URL hashes -->
<script type="text/javascript" src="../jsPy_v3/jquery.jsPlumb-1.3.10-all-min.js "></script> <!-- for rendering SVG connectors 
                                                                                
<script type="text/javascript" src="../jsPy_v3/jquery-ui-1.8.24.custom.min.js"></script> 
 <link type="text/css" href="../css_v3/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
<link type="text/css" href="../css_v3/basic.css" rel="stylesheet" />

	<script src="../js/loadContent.js"></script>

    
<script type="text/javascript" src="../jsPy_v3/pytutor.js"></script>
<link rel="stylesheet" href="../css_v3/pytutor.css"/>
    
<script type="text/javascript" src="../jsPy_v3/jquery.ba-dotimeout.min.js"></script>
<script type="text/javascript" src="../jsPy_v3/opt-frontend-common.js"></script> 
<script type="text/javascript" src="../jsPy_v3/opt-office-mix.js"></script> 

// Pre-reqs opt-office-mix.js:
// - pytutor.js check
// - jquery.ba-bbq.min.js check
// - jquery.ba-dotimeout.min.js DONT HAVE now have
// - opt-frontend-common.js DONT HAVE now have
// should all be imported BEFORE this file


Now what dependencies do I need for:opt-office-mix.js
<script type="text/javascript" src="../jsPy_v3/togetherjs/togetherjs-min.js"></script> \\I NEED THIS 


// - js/togetherjs/togetherjs-min.js
// should all be imported BEFORE this file
Now what dependencies do I need for: opt-frontend-common.js
<script type="text/javascript" src="../jsPy_v3/opt-office-mix.js"></script> 



// include this file BEFORE any OPT frontend file


// backend scripts to execute (Python 2 and 3 variants, if available)
// make two copies of ../web_exec.py and give them the following names,
// then change the first line (starting with #!) to the proper version
// of the Python interpreter (i.e., Python 2 or Python 3).
// Note that your hosting provider might have stringent rules for what
// kind of scripts are allowed to execute. For instance, my provider
// (Webfaction) seems to let scripts execute only if permissions are
// something like:
// -rwxr-xr-x 1 pgbovine pgbovine 2.5K Jul  5 22:46 web_exec_py2.py*
// (most notably, only the owner of the file should have write
//  permissions)
//var python2_backend_script = 'web_exec_py2.py';
//var python3_backend_script = 'web_exec_py3.py';

