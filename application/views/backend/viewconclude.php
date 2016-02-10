<div class=""><?php
  // print_r($conclusion);
  ?>

  <table class="bordered responsive-table">
      <thead>
          <tr>
              <th>
                  Question
              </th>
              <th>
                  Weight
              </th>
          </tr>
      </thead>
      <tbody>
          <!--                        for each for Question-->
        <?php  foreach($conclusion as $question) { ?>
          <tr>
              <td>
                  <?php echo $question->text;?>
              </td>
              <td>
                  <div>
                      <?php echo $question->avgquestionweight->avgquestionweight;?>
                  </div>
                  <table class="bordered responsive-table">
                      <thead>
                          <tr>
                              <th>
                                  Options
                              </th>
                              <th>
                                  Weight
                              </th>
                              <th>
                                  Average
                              </th>
                          </tr>
                      </thead>
                      <tbody>
  <!--                        for each for option-->
                           <?php  foreach($question->options as $option) { ?>
                          <tr>
                              <td>
                                <?php echo $option->optiontext;?>
                              </td>
                              <td>
                                  Weight(   <?php echo $option->weight;?>%)
                              </td>
                              <td>
                                  Average( <?php echo $question->avgweight->avgweight;?>%)
                              </td>
                          </tr>
                             <?php }?>
                          <!--                        for each for option ends-->
                      </tbody>
                  </table>
              </td>


          </tr>
          <!--                        for each for  Question Ends-->
          <?php }?>
      </tbody>
  </table>


  <!--// OPTIONS-->
    <table class="bordered responsive-table">
                      <thead>
                          <tr>
                              <th>
                                  QUESTION 1 (OPTIONS)
                              </th>
                              <th>
                                  QUESTION 2 (OPTIONS)
                              </th>
                              <th>
                                  COUNT
                              </th>
                          </tr>
                      </thead>
                      <tbody>
  <!--                        for each for option-->
                         <?php foreach($optiondata as $getoption){?>
                          <tr>
                              <td>
                              <?php echo $getoption->option1?>
                              </td>
                              <td>
                                 <?php echo $getoption->option2?>
                              </td>
                              <td>
                             <?php echo $getoption->countuser?>
                              </td>
                          </tr>
                             <?php }?>
                          <!--                        for each for option ends-->
                      </tbody>
                  </table>
  </div>
