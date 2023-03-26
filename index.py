import conection_bot
import markup_function
import callback_function

data_language_uk, data_language_id = conection_bot.getDataCsv()
bot = conection_bot.conectToBot()

print(data_language_id)

@bot.callback_query_handler(func=lambda call: True)
def handle_query(call):
  next = bot.send_message(call.message.chat.id,  callback_function.check_callback_message(call=call))
  bot.register_next_step_handler(next, main_menu(call.message))

@bot.message_handler(commands=['start', 'help'], func=lambda message: True)
def send_welcome(message):
  language_markup = markup_function.markup_change_Language()
  bot.send_message(message.chat.id, "Selamat Datang di Bot Magang,\n Pilih Bahasa yang akan digunakan", reply_markup=language_markup)

def main_menu(call):
  menu_markup = markup_function.markup_change_Language()
  bot.send_message(call.message.chat.id, "Silahkan pilih menu", reply_markup=menu_markup)

bot.polling()