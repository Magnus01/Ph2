var listSumTrace = {"code": "def addVectors (v1, v2):\n    \n    sum = []\n\n    if len(v1) != len(v2):\n        sum = []\n    else:\n        for i in range(len(v1)):\n            sum.append(v1[i]+v2[i])\n            \n    return sum\n    \naddVectors([1, 2, 3], [3, 2, 1])\n\t\t\t\t", "trace": [{"ordered_globals": [], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {}, "heap": {}, "line": 1, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null]}, "line": 13, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"v1": ["REF", 2], "v2": ["REF", 3]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1]}, "line": 1, "event": "call"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"v1": ["REF", 2], "v2": ["REF", 3]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1]}, "line": 3, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST"]}, "line": 5, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST"]}, "line": 8, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 0, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST"]}, "line": 9, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 0, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4]}, "line": 8, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 1, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4]}, "line": 9, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 1, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4, 4]}, "line": 8, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 2, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4, 4]}, "line": 9, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 2, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4, 4, 4]}, "line": 8, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 2, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4, 4, 4]}, "line": 11, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "addVectors", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"i": 2, "v1": ["REF", 2], "v2": ["REF", 3], "sum": ["REF", 4], "__return__": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "addVectors", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "addVectors_f1", "ordered_varnames": ["v1", "v2", "sum", "i", "__return__"]}], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null], "2": ["LIST", 1, 2, 3], "3": ["LIST", 3, 2, 1], "4": ["LIST", 4, 4, 4]}, "line": 11, "event": "return"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null]}, "line": 13, "event": "return"}]};
