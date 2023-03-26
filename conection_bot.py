import telebot

TOKEN = '6147252599:AAHEXQZNmrKGIjNgkyOMzuEWjw5ObkJtCeo'

def conectToBot():
  tb = telebot.TeleBot(TOKEN)
  return tb