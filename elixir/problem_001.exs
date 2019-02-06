defmodule MyList do 
  def sum_of_all_multples_of_3_or_5_below(intBelow) do 
    Enum.to_list(1..(intBelow-1))
    |> Enum.filter(fn x -> rem(x,3)==0 or rem(x,5)==0 end)
    |> Enum.sum
  end
end
