var listSumTrace = {"code": "def addVectors (v1, v2):\n    \n    sum = []\n\n    if len(v1) != len(v2):\n        print \"\\nVektorene har ikke samme dimensjon!\\n\"\n    else:\n        for i in range(len(v1)):\n            sum.append(v1[i]+v2[i])\n            \n    return sum", "trace": [{"ordered_globals": [], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {}, "heap": {}, "line": 1, "event": "step_line"}, {"ordered_globals": ["addVectors"], "stdout": "", "func_name": "<module>", "stack_to_render": [], "globals": {"addVectors": ["REF", 1]}, "heap": {"1": ["FUNCTION", "addVectors(v1, v2)", null]}, "line": 1, "event": "return"}]};
