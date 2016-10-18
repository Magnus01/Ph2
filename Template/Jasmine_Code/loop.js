describe('this is my looping test!', function() {
  var input = [1,2,3];
  var output = [10, 20, 30];

  function test_my_times_ten(input, output) {
    it('should multiply ' + input + ' by 10 to give ' + output, function() {
      expect(input * 10).toEqual(output)
    });
  }

  for(var x = 0; x < input.size; x++) {
    test_my_times_ten(input[x], output[x]);
  }
});