
import conection_bot
import markup_function
import callback_function

bot = conection_bot.conectToBot()

@bot.callback_query_handler(func=lambda call: True)
def handle_query(call):
  bot.send_message(call.message.chat.id,  callback_function.check_callback_message(call=call))

@bot.message_handler(commands=['start', 'help'], func=lambda message: True)
def send_welcome(message):
  language_markup = markup_function.markup_change_Language()
  bot.send_message(message.chat.id, "Selamat Datang di Bot Magang,\n Pilih Bahasa yang akan digunakan", reply_markup=language_markup)


bot.polling()