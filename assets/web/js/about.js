$(document).ready(function() {
  $('.faq-item').each(function() {
    const $item = $(this);
    const $question = $item.find('.faq-question');
    const $answer = $item.next();
    const $icon = $item.find('i');

    $item.on('click', function() {
      $('.faq-item').not($item).each(function() {
        const $otherItem = $(this);
        const $otherAnswer = $otherItem.next();
        const $otherIcon = $otherItem.find('i');

        $otherAnswer.removeClass('active');
        $otherIcon.removeClass('active');
        $otherAnswer.css('maxHeight', '0');
      });

      $answer.toggleClass('active');
      $icon.toggleClass('active');
      if ($answer.hasClass('active')) {
        $answer.css('maxHeight', $answer.prop('scrollHeight') + 'px');
      } else {
        $answer.css('maxHeight', '0');
      }
    });
  });
});