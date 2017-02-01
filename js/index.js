// Python Tutor: https://github.com/pgbovine/OnlinePythonTutor/
// Copyright (C) Philip Guo (philip@pgbovine.net)
// LICENSE: https://github.com/pgbovine/OnlinePythonTutor/blob/master/LICENSE.txt

import {ExecutionVisualizer} from './pytutor.ts';
require('../css/index.css');

var demoTrace = {"code": "def listSum(numbers):\n  if not numbers:\n    return 0\n  else:\n    (f, rest) = numbers\n    return f + listSum(rest)\n\nmyList = (1, (2, (3, None)))\ntotal = listSum(myList)\n", "trace": [{"ordered_globals": [], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {}, "heap": {}, "line": 1, "event": "step_line"}, {"ordered_globals": ["listSum"], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {"listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null]}, "line": 8, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 9, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 1, "event": "call"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 2, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 5, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 6, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 1, "event": "call"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 2, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 5, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 6, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 1, "event": "call"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 2, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4]}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 5, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4], "rest": null, "f": 3}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers", "f", "rest"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 6, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4], "rest": null, "f": 3}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 4, "encoded_locals": {"numbers": null}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f4", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 1, "event": "call"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4], "rest": null, "f": 3}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 4, "encoded_locals": {"numbers": null}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f4", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 2, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4], "rest": null, "f": 3}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 4, "encoded_locals": {"numbers": null}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f4", "ordered_varnames": ["numbers"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 3, "event": "step_line"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"numbers": ["REF", 4], "rest": null, "f": 3}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 4, "encoded_locals": {"__return__": 0, "numbers": null}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f4", "ordered_varnames": ["numbers", "__return__"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 3, "event": "return"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 3, "encoded_locals": {"__return__": 3, "numbers": ["REF", 4], "rest": null, "f": 3}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f3", "ordered_varnames": ["numbers", "f", "rest", "__return__"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 6, "event": "return"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": false, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest"]}, {"frame_id": 2, "encoded_locals": {"__return__": 5, "numbers": ["REF", 3], "rest": ["REF", 4], "f": 2}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f2", "ordered_varnames": ["numbers", "f", "rest", "__return__"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 6, "event": "return"}, {"ordered_globals": ["listSum", "myList"], "stdout": "", "func_name": "listSum", "stack_to_render": [{"frame_id": 1, "encoded_locals": {"__return__": 6, "numbers": ["REF", 2], "rest": ["REF", 3], "f": 1}, "is_highlighted": true, "is_parent": false, "func_name": "listSum", "is_zombie": false, "parent_frame_id_list": [], "unique_hash": "listSum_f1", "ordered_varnames": ["numbers", "f", "rest", "__return__"]}], "globals": {"myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 6, "event": "return"}, {"ordered_globals": ["listSum", "myList", "total"], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {"total": 6, "myList": ["REF", 2], "listSum": ["REF", 1]}, "heap": {"1": ["FUNCTION", "listSum(numbers)", null], "2": ["TUPLE", 1, ["REF", 3]], "3": ["TUPLE", 2, ["REF", 4]], "4": ["TUPLE", 3, null]}, "line": 9, "event": "return"}]};


$(document).ready(function() {
  $("#cp-thumbnail").attr('src', require('./images/opt-v3-cs61a-embed-small.png'));

  var demoViz = new ExecutionVisualizer('demoViz', demoTrace, {embeddedMode: true,
                                                               lang: 'py2',
                                                               startingInstruction: 10,
                                                               editCodeBaseURL: 'visualize.html'});

  // redraw connector arrows on window resize
  $(window).resize(function() {
    demoViz.redrawConnectors();
  });

  demoViz.redrawConnectors(); // redraw once at the end to line up connectors
});
