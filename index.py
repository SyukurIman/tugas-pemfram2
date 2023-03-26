# -*- coding: utf-8 -*-
import conection_bot
import markup_function
import callback_function
import urllib
import general_function

data_language_uk, data_language_id = conection_bot.getDataCsv()
bot = conection_bot.conectToBot()

data_language_uk.set_index("id", inplace = True)
data_language_id.set_index("id", inplace = True)
state = None

@bot.callback_query_handler(func=lambda call: True)
def handle_query(call):
  next = bot.send_message(call.message.chat.id,  callback_function.check_callback_message(call=call))

@bot.message_handler(commands=['start'], func=lambda message: True)
def send_welcome(message):
  global state

  cek_user = general_function.get_username(message.chat.id)
  if cek_user == '':
    messageText = str(data_language_uk.loc[1]['text']).replace("\\n", "\n")
    bot.send_message(message.chat.id, messageText, 
                     reply_markup=markup_function.markup_reply())
    state = 'Main_Check'
  elif cek_user == True:
    language_markup = markup_function.markup_change_Language()
    messageText = str(data_language_uk.loc[2]['text']).replace("\\n", "\n")
    bot.send_message(message.chat.id, messageText, 
                     reply_markup=language_markup)

@bot.message_handler(func=lambda message: True)
def echo_message(message):
    global state

    if state == 'Main_Check':
      cek_user = general_function.get_username(message.chat.id)
      if cek_user == '':
        result = general_function.set_username(message.text, message.chat.id)
        if result == False:
          messageText = str(data_language_uk.loc[72]['text']).replace("\\n", "\n")
          bot.send_message(message.chat.id, messageText)
        else :
          language_markup = markup_function.markup_change_Language()
          messageText = str(data_language_uk.loc[2]['text']).replace("\\n", "\n")
          bot.send_message(message.chat.id, messageText, 
                      reply_markup=language_markup)
      else:
        state = 'Main'
        language_markup = markup_function.markup_change_Language()
        messageText = str(data_language_uk.loc[2]['text']).replace("\\n", "\n")
        bot.send_message(message.chat.id, messageText, 
                    reply_markup=language_markup)
    else :
      bot.send_message(message.chat.id, 'essageText', 
                      reply_markup=language_markup)

bot.polling()