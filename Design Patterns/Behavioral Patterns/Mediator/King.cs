using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Mediator
{
    class King : IMediator<Soldier>
    {
        private static Random rand;
        private List<Soldier> colleagues;
        public King()
        {
            colleagues = new List<Soldier>();
            rand = new Random();
        }
        public void addColleague(Soldier newcolleague)
        {
            colleagues.Add(newcolleague);
        }

        public void MSGOfTheLand(string message, Soldier soldier)
        {
            int answer = rand.Next(2);
            Console.WriteLine(soldier.ToString()+" \""+message+"\"");
            switch (answer)
            {
                case 0:
                    Console.WriteLine(soldier.ToString()+ " "+"\"Thank you! You are dismissed.\"");
                    break;
                case 1:
                    Console.WriteLine(soldier.ToString()+" "+"\"Interesting message. I shall make an anouncement.\"");
                    break;
            }
            
        }
        public void PersonalRequest(string request, Soldier soldier)
        {
            int answer = rand.Next(5);
            Console.WriteLine(soldier.ToString() + " \"" + request+"\"");
            switch (answer)
            {
                case 0:
                    Console.WriteLine(this.ToString()+" "+"\"I've heard enough! You are dismissed!\"");
                    break;
                case 1:
                    Console.WriteLine(this.ToString() + " " + "\"Off with his head!\"");
                    break;
                case 2:
                    Console.WriteLine(this.ToString() + " " + "\"I accept your request!\"");
                    break;
                case 3:
                    Console.WriteLine(this.ToString() + " " + "\"Interesting! I grant you full permission.\"");
                    break;
                case 4:
                    if (soldier.ToString() == "The Neighbor Soldier said")
                    {
                        Console.WriteLine(this.ToString() + " " + "\"Ready up my soldiers! It's time to go to war against these mongrels!\"");
                    }
                    else
                    {
                        Console.WriteLine(this.ToString() + " " + "\"I will deny your request.\"");
                    }
                    break;
            }
        }
        public override string ToString()
        {
            return "The King said";
        }
    }
}
